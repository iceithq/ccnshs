<?php

class Setup extends CI_Controller {

  var $setup_service;

  function __construct() {
    parent::__construct();
    $this->setup_service = new Setup_service();
  }

  function index() {
    $data = array();
    $this->load->view(get_theme() . '/setup/index', $data);
  }

  function clear_users() {
    $this->db->truncate('users');

    $user = array('username' => 'a', 'password' => password_hash('a', PASSWORD_BCRYPT));
    $this->user_model->save($user);

    echo '<div id="message">OK</div>';
  }

  function unattended() {
    list($db_hostname, $db_username, $db_password, $db_database) = array(
      'localhost',
      'root',
      '',
      'ccnshs'
    );
    // $this->setup_service->update_database_config($db_hostname, $db_username, $db_password, $db_database);

    $this->setup_service->load_database_schema($db_hostname, $db_username, $db_password, $db_database);
    // $this->setup_service->load_database_functions($db_hostname, $db_username, $db_password, $db_database);

    // $this->create_admin('admin', 'password');
    echo '<div id="message">OK</div>';
  }
}


class Setup_service {

  function __construct() {
    $obj = &get_instance();
    $obj->load->database();
    $obj->load->model('user_model');
    $this->user_model = $obj->user_model;
  }

  function update_database_config($hostname, $username, $password, $database) {
    $content = file_get_contents(APPPATH . '/config/database-template.php');
    $content = str_replace("{HOSTNAME}", $hostname, $content);
    $content = str_replace("{USERNAME}", $username, $content);
    $content = str_replace("{PASSWORD}", $password, $content);
    $content = str_replace("{DATABASE}", $database, $content);

    $database_file = APPPATH . '/config/database.php.new';
    file_put_contents($database_file, $content);
  }

  function load_database_schema($hostname, $username, $password, $database) {
    $content = file_get_contents(APPPATH . '/doc/schema.sql');
    $content = str_replace("{DATABASE}", $database, $content);
    $this->mysql_query($content, $hostname, $username, $password, $database);
  }

  function load_database_functions($hostname, $username, $password, $database) {
    $content = file_get_contents(APPPATH . '/doc/all_functions.sql');
    $content = str_replace("delimiter ;", '', $content);
    $content = str_replace("delimiter", '', $content);
    $this->mysql_query($content, $hostname, $username, $password, $database, '$$');
  }

  function create_admin($admin) {
    $admin_id = $this->user_model->save($admin);
  }

  private function mysql_query($sql_queries, $hostname, $username, $password, $database, $delimiter = ";") {
    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $queries = explode($delimiter, $sql_queries);
    foreach ($queries as $query) {
      if (trim($query) == ''
        || my_str_starts_with('--', trim($query)
        || my_str_starts_with('delimiter', trim($query)))) {
        continue;
      }
      // print_pre($query);
      if ($conn->query($query) === TRUE) {
//        echo "Query executed successfully: " . $query . "<br>";
      } else {
        echo "Error executing query: " . $conn->error . "<br>";
      }
    }
    $conn->close();
  }

}

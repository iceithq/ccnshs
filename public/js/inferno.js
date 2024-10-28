  class Inferno {
    static login(url, username, password, success, error) {
      var data = {
        username: username,
        password: password
      };
      Inferno.post(url + '/api/login', data, success, error);
    }
    static featurePost(url, token, postId, isFeatured, success, error) {
      var data = {
        token: token,
        post_id: postId,
        is_featured: isFeatured,
      };
      Inferno.post(url + '/api/feature_post', data, success, error);
    }

    static get(url, data, success, error) {
      $.ajax({
        url: url,
        type: 'GET',
        data: data,
        success: function (data, textStatus, jqXHR) {
          success(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          error(jqXHR);
        }
      });
    }
    static post(url, data, success, error) {
      console.log(data);
      $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (data, textStatus, jqXHR) {
          success(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          error(jqXHR);
        }
      });
    }
    static postMultiPart(url, data, success, error) {
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: url,
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        success: function (data, textStatus, jqXHR) {
          success(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          error(jqXHR)
        }
      });
    }
  }
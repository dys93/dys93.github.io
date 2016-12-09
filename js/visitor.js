$.getJSON('http://freegeoip.net/json/?callback=?', function(data) {
    data['url'] = document.URL;
    $.ajax({
        type: 'POST',
        dataType: "jsonp",
        url: "http://server.ysding.xyz/writeip",
        crossDomain: true,
        data: data,
        dataType: 'json',
        error: function (responseData, textStatus, errorThrown) {
            console.log('POST failed.');
        },
        success: function(responseData, textStatus){
          console.log('Success')
        }

    });
});   


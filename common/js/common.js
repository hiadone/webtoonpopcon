/*
// 쿠키 입력
    function set_cookie(name, value, expirehours, domain) {
        var today = new Date();
        today.setTime(today.getTime() + (60*60*1000*expirehours));
        document.cookie = name + '=' + escape( value) + '; path=/; expires=' + today.toGMTString() + ';';
        if (domain) {
            document.cookie += 'domain=' + domain + ';';
        }
    }

    // 쿠키 얻음
    function get_cookie(cookie_name) {
        var find_sw = false;
        var start, end;
        var i = 0;

        name = cookie_name

        for (i = 0; i <= document.cookie.length; i++) {
            start = i;
            end = start + name.length;

            if (document.cookie.substring(start, end) == name) {
                find_sw = true
                break
            }
        }

        if (find_sw === true) {
            start = end + 1;
            end = document.cookie.indexOf(';', start);

            if (end < start) {
                end = document.cookie.length;
            }

            return document.cookie.substring(start, end);
        }
        return '';
    }

    // 쿠키 지움
    function delete_cookie(name) {
        var today = new Date();

        today.setTime(today.getTime() - 1);
        var value = get_cookie(name);
        if (value) {
            document.cookie = cookie_prefix + name + '=' + value + '; path=/; expires=' + today.toGMTString();
        }
    }
	*/
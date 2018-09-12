"use strict";

export class Utility{
    constructor() {

    }

    /* 単位の除去
    --------------------------------------------- */
    removeUnit(_num){
        var answer;
        if(_num!=null){
            answer=parseInt(_num.replace(/([a-z]+)/,''));
        }
        return answer;
    }

    /* ユーザーエージェント
    --------------------------------------------- */
    userAgent(){
        var answer;
        var ua = navigator.userAgent;

        if (ua.indexOf("iPhone") > -1 || ua.indexOf("iPad") > -1 || ua.indexOf("iPod") > -1) answer = "ios";
        else if(ua.indexOf("Android") > -1) answer = "android";
        else answer = "pc";
        return answer;
    }


    /* ブラウザタイプ
    --------------------------------------------- */
    blowserType(){
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.indexOf('opera') != -1) {
            return 'opera';
        } else if (ua.indexOf('msie') != -1) {
            return 'ie';
        } else if (ua.indexOf('chrome') != -1) {
            return 'chrome';
        } else if (ua.indexOf('safari') != -1) {
            return 'safari';
        } else if (ua.indexOf('gecko') != -1) {
            return 'gecko';
        } else if (ua.indexOf('android') != -1) {
            return 'android';
        } else if (ua.indexOf('mobile') != -1) {
            return 'mobile';
        }
        return false;
    }

    /* ブラウザバージョン
    --------------------------------------------- */
    blowserVersion(){
        var answer=window.navigator.appVersion.toLowerCase();
        if(navigator.userAgent.indexOf("MSIE") > -1){
            answer=(answer.indexOf('msie')>-1)?parseInt(answer.replace(/.*msie[ ]/,'').match(/^[0-9]+/)):0;
        }
        return answer;
    }

    /* GET変数の取得
    --------------------------------------------- */
    getParams() {
        if (1 < document.location.search.length) {
            // 最初の1文字 (?記号) を除いた文字列を取得する
            var query = document.location.search.substring(1);

            // クエリの区切り記号 (&) で文字列を配列に分割する
            var parameters = query.split('&');

            var result = new Object();
            for (var i = 0; i < parameters.length; i++) {
                // パラメータ名とパラメータ値に分割する
                var element = parameters[i].split('=');

                var paramName = decodeURIComponent(element[0]);
                var paramValue = decodeURIComponent(element[1]);

                // パラメータ名をキーとして連想配列に追加する
                result[paramName] = decodeURIComponent(paramValue);
            }
            return result;
        }
        return null;
    }

    /* ベクトルの角度を求める
    --------------------------------------------- */
    calculateCosine  (x, y) { return x / Math.sqrt(x * x + y * y); };
    calculateRadian  (cos) { return Math.acos(cos) / (Math.PI / 180); };



    /* 配列のシャッフル
    --------------------------------------------- */

    shuffle(array) {
        var n = array.length, t, i;

        while (n) {
            i = Math.floor(Math.random() * n--);
            t = array[n];
            array[n] = array[i];
            array[i] = t;
        }

        return array;
    }

}





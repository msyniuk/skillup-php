'use strict';

$(document).ready(function () {

var $op1 = $('#op1'),
    $op2 = $('#op2'),
    $result = $('#result');

function onClick(event) {
    var op1 = parseFloat($op1.val()),
        op2 = parseFloat($op2.val());

    switch ($(this).html()) {
        case '+': $result.html(op1 + op2); break;
        case '-': $result.html(op1 - op2); break;
        case '*': $result.html(op1 * op2); break;
        case '/': $result.html(op1 / op2); break;
    }
}

    $('button').click(onClick);

    $('#slide').click(function () {
    $('#panel').slideToggle();
    $(this).toggleClass('active');
    });

    $('#hide').click(function () {
        var $panel = $('#panel');
        if ( $panel.is(':visible') ) {
            $panel.animate({opacity: "hide"}, "slow");
        } else {
            $panel.animate({opacity: "show"}, "slow");
        }
        $(this).toggleClass('active');
    });

    $('#load').click(function (event) {
       event.preventDefault();
       var target = $(this).attr('target'),
           href = $(this).attr('href');
       //$(target).load(href);
       $.get(href, function (content) {
           $(target).html(content);
       });
    });

    $('#changeh2').click(function () {
       var $h2 = $('h2');
       var str = $h2.html();
       if(str.indexOf('h2') + 1) {
           $('h2').html('!');
       } else {
           $('h2').html('Заголовок h2');
       }
       $(this).toggleClass('active');
     });

    $('#changeh3').click(function () {
       var $h3 = $('h3');
       var color = $h3.css('color');
       if (color === 'rgb(255, 0, 0)') {
           $('h3').css('color', 'black');
       } else {
           $('h3').css('color', 'red');
       }
       $(this).toggleClass('active');
     });

    $('#changeh2color').click(function () {
       var $h2 = $('h2');
       var color = $h2.css('color');
       if (color === 'rgb(0, 0, 0)') {
           $('h2').css({'color': 'blue', 'font-size': '30px'});
       } else {
           $('h2').css({'color': 'black', 'font-size': '24px'});
       }
       $(this).toggleClass('active');
     });

    $('#testchange').click(function () {
        var $test = $('.test');
        var color = $test.css('color');
        if (color === 'rgb(255, 0, 0)') {
           $('.test').css('color', 'black');
        } else {
           $('.test').css('color', 'red');
        }
        $(this).toggleClass('active');
    });

    $('#h2testchange').click(function () {
        var $h2test = $('h2.test');
        var color = $h2test.css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2.test').css('color', 'black');
        } else {
            $('h2.test').css('color', 'red');
        }
        $(this).toggleClass('active');
    });

    $('#allheaders').click(function () {
        var color = $(':header').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $(':header').css('color', 'black');
        } else {
            $(':header').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#noth2test').click(function () {
        var $h2test = $('h2:not(.test)');
        var color = $h2test.css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2:not(.test)').css('color', 'black');
        } else {
            $('h2:not(.test)').css('color', 'red');
        }
        $(this).toggleClass('active');
    });

    $('#allnottest').click(function () {
        var color = $(':header:not(.test)').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $(':header:not(.test)').css('color', 'black');
        } else {
            $(':header:not(.test)').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#afterheader').click(function () {
        var color = $(':header + :header').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $(':header + :header').css('color', 'black');
        } else {
            $(':header + :header').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#pfirst').click(function () {
        var color = $('p:first').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('p:first').css('color', 'black');
        } else {
            $('p:first').css('color', 'red');
        }
        $(this).toggleClass('active');
     });
    $('#plast').click(function () {
        var color = $('p:last').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('p:last').css('color', 'black');
        } else {
            $('p:last').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#afterp').click(function () {
        var color = $('p + p').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('p + p').css('color', 'black');
        } else {
            $('p + p').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#h2withi').click(function () {
        var color = $('h2:has(i)').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2:has(i)').css('color', 'black');
        } else {
            $('h2:has(i)').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#h2contenti').click(function () {
        var color = $('h2 > i').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2 > i').css('color', 'black');
        } else {
            $('h2 > i').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#li3').click(function () {
        var color = $('li:eq(2)').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('li:eq(2)').css('color', 'black');
        } else {
            $('li:eq(2)').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#li10').click(function () {
        var color = $('li:lt(9)').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('li:lt(9)').css('color', 'black');
        } else {
            $('li:lt(9)').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#liwww').click(function () {
        var color = $('li.www + li').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('li.www + li').css('color', 'black');
        } else {
            $('li.www + li').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#alliinh2').click(function () {
        var color = $('h2 i').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2 i').css('color', 'black');
        } else {
            $('h2 i').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

    $('#allivnutrih2').click(function () {
        var color = $('h2 > i').css('color');
        if (color === 'rgb(255, 0, 0)') {
            $('h2 > i').css('color', 'black');
        } else {
            $('h2 > i').css('color', 'red');
        }
        $(this).toggleClass('active');
     });

});
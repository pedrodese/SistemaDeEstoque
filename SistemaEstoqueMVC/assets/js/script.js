$(function(){

    $('input[name=price]').mask("#0,00", {reverse: true});
    $('input[name=quantity]').mask("#0,00", {reverse: true});
    $('input[name=min_quantity]').mask("#0,00", {reverse: true});
    $('input[name=cod]').mask("#", {reverse: true});


});
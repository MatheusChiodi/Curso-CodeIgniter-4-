$(document).ready(function(){
$(function () {
    /* Summernote Validation */
    var summernoteForm = $('.validarForm');
    var summernoteValidator = summernoteForm.validate({
    errorElement: "div",
    errorClass: 'is-invalid',
    validClass: 'is-valid',/*
            ignore: ':hidden:not(.summernote),.note-editable.card-block',*/
    errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("invalid-feedback");
            console.log(element);
            if (element.prop("type") === "checkbox") {
            error.insertAfter(element.siblings("label"));
            } else if (element.hasClass("summernote")) {
            error.insertAfter(element.siblings(".note-editor"));
            } else {
            error.insertAfter(element);
            }
    }
    });

    var summernoteForm2 = $('.validarFormOuvidoria');
    var summernoteValidator2 = summernoteForm2.validate({
    errorElement: "div",
    errorClass: 'is-invalid',
    validClass: 'is-valid',/*
            ignore: ':hidden:not(.summernote),.note-editable.card-block',*/
    errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("invalid-feedback");
            console.log(element);
            if (element.prop("type") === "checkbox") {
            error.insertAfter(element.siblings("label"));
            } else if (element.hasClass("summernote")) {
            error.insertAfter(element.siblings(".note-editor"));
            } else {
            error.insertAfter(element);
            }
    }
    });

    var summernoteForm3 = $('.validarFormContato');
    var summernoteValidator3 = summernoteForm3.validate({
    errorElement: "div",
    errorClass: 'is-invalid',
    validClass: 'is-valid',/*
            ignore: ':hidden:not(.summernote),.note-editable.card-block',*/
    errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("invalid-feedback");
            console.log(element);
            if (element.prop("type") === "checkbox") {
            error.insertAfter(element.siblings("label"));
            } else if (element.hasClass("summernote")) {
            error.insertAfter(element.siblings(".note-editor"));
            } else {
            error.insertAfter(element);
            }
    }
    });
});
//------------ mascaras padrões -----------------------------
$('.maskData').mask('00/00/0000');
$('.maskTelDefault').mask('(00)000000000');
$('.maskCelularSp').mask('(00)00000-0000');
$('.maskDDIDDDtelefone').mask('(00)(00)000000000');
$('.maskCelular').mask('(00)0000-0000');
$('.maskTelefone').mask('(00)0000-0000');
$('.maskCep').mask('00000-000');
$('.maskCpf').mask('000.000.000-00');
});

// ----------------------------------------------------------------------------

let items = document.querySelectorAll('.carousel .AcessoRapido')
    items.forEach((el) => {
        const minPerSlide = 6
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })

    let items2 = document.querySelectorAll('.carousel .AcessoRapido2')
    items2.forEach((el) => {
        const minPerSlide = 3
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                next = items2[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })

    let items3 = document.querySelectorAll('.carousel .AcessoRapido3')
    items3.forEach((el) => {
        const minPerSlide = 2
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                next = items3[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
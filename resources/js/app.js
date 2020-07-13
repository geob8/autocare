/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

window.axios = require("axios");
// import Form from "./Form";
// window.Form = Form;

Vue.component(
    "calendar-component",
    require("./components/CalendarComponent.vue").default
);

const app = new Vue({
    el: "#app"
});
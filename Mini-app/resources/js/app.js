import Vue from 'vue';
import axios from 'axios'; // Import Axios library
import TaskForm from './components/TaskForm.vue'; // Import your Vue component

window.Vue = Vue;

Vue.component('task-form', TaskForm); // Register your Vue component globally


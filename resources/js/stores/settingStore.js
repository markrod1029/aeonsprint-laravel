import axios from 'axios';
import { ref } from "vue";
import { defineStore } from 'pinia';
import { } from '@vueuse/core';

const setting = ref([]);

const useSettingStore = defineStore('SettingStore', () => {
    const setting = ref({
        app_name: '',
    });


let getSetting = () => {
    axios.get('/api/settings')
    .then((response) => {
        setting.valaue = response.data;
    })
}

return { setting, getSetting }
});
<template>
        <tr>
            <td>{{ service.id }}</td>
            <td>{{ service.name }}</td>
             <td>
                <a href="#" @click.prevent="editService(service)" class="btn btn-primary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
                <a href="#" @click.prevent="comfirmDeleteService(service)" class="btn btn-danger btn-sm " style="margin-right: 5px;"><i class="fa fa-trash"></i> </a>
            </td>
        </tr>
</template>



<script setup>
import { ref } from 'vue';

defineProps ({
    service: Object,
    index: Number
})
</script>
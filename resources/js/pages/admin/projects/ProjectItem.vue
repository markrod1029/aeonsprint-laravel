<template>
        <tr>
            <td>{{ project.id }}</td>
            <td>{{ project.name }}</td>
            <td>{{ project.description }}</td>
            <td>
            <a href="#" @click.prevent="editProject(project)" class="btn btn-primary btn-sm" style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
</template>


<script setup>

defineProps ({
    project: Object,
    index: Number 
})
</script>
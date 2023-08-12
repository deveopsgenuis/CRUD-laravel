<template>
    <form @submit.prevent="submitTask">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Task Name:</label>
            <input v-model="taskName" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Task Description:</label>
            <textarea v-model="taskDescription" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" rows="3"></textarea>
        </div>
        <div class="flex items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Create Task
            </button>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            taskName: '',
            taskDescription: '',
        };
    },
    methods: {
        async submitTask() {
            const response = await axios.post('/api/tasks', {
                name: this.taskName,
                description: this.taskDescription,
            });

            // Do something with the response, e.g., display a success message.
            console.log(response.data);
        },
    },
};
</script>

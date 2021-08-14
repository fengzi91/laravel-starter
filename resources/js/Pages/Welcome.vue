<template>
  <div class="flex min-h-screen flex-col justify-center items-center">
    <div class="container">
      <div class="shadow-lg max-w-7xl mx-auto px-4 py-5 rounded-lg text-center">
        <p class="text-indigo-500">{{ content }}</p>
        <div class="mt-6">counter: {{count}} <button @click="add" class="text-sm font-semibold bg-indigo-600 rounded-lg text-white py-3 px-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-teal-600 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 hover:bg-teal-500">add</button></div>
      </div>

    </div>
  </div>
</template>
<script>
export default {
  name: 'Welcome',
  data() {
    return {
      content: this.$page.props.content,
      count: 0,
    }
  },
  methods: {
    add() {
      this.count++
    }
  }
}
</script>

<template>
  <div class="welcome">
    <div class="container">
      <p>{{ content }}</p>
      <div>counter: {{count}} <button @click="add">add</button></div>
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
<style scoped>
.welcome {
  display: flex;
  flex: 1;
  flex-direction: column;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
}
.welcome .container {
  box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05);
  padding: 4rem;
  border-radius: 2.08333% / 4.6875%;
  background-color: rgb(255, 255, 255);
}
</style>

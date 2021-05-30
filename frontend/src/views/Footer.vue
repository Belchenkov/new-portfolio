<template>
  <footer class="footer text-white container-fluid">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="nav justify-content-center justify-content-md-start">
            <a href="https://telegram.me/BelchenkovAleksey" target="_blank">
              <i class="fa fa-telegram"></i>
            </a>
            <a href="https://career.habr.com/belchenkov--aleksey" target="_blank">
              <i class="fa fa-h-square"></i>
            </a>
            <a href="https://github.com/Belchenkov" target="_blank">
              <i class="fa fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/belchenkovaleksey" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://join.skype.com/invite/Gl19POeU5FkT" target="_blank">
              <i class="fa fa-skype"></i>
            </a>
            <a href="https://vk.com/id545143985" target="_blank">
              <i class="fa fa-vk"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <p>&copy; {{ year }} Aleksey Belchenkov</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  computed: {
    year() {
      return new Date().getFullYear();
    },
  },
};
</script>

<style scoped>

</style>

<template>
  <div id="works">
    <div class="title">
      <h3>My Works</h3>
    </div>
    <br><br>

    <div class="container text-white">
      <div id="wrap">
        <div class="wrapper">
          <div class="topbar">
            <span class="back" id="close">&larr;</span>
          </div>
          <ul id="tp-grid" class="tp-grid">
            <li
              v-for="(item, index) in 5"
              :key="index"
              data-pile="HTML5/CSS3/Flexbox"
            >
              <a href="#">
                <span class="tp-info">
                  <span>Верстка на Bootstrap 4</span>
                  <a href="https://github.com/Belchenkov">
                    <i class="fa fa-github"></i> Code
                  </a>
                  <a href="https://github.com/Belchenkov">
                    <i class="fa fa-video-camera"></i> Preview
                  </a>
                </span>
                <img :src="work2" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="separated"></div>
  </div>
</template>

<script>
import work1 from '../assets/img/1.png';
import work2 from '../assets/img/2.png';
import work3 from '../assets/img/3.png';
import work4 from '../assets/img/4.png';
import work5 from '../assets/img/5.png';

export default {
  name: 'Works',
  data() {
    return {
      work1,
      work2,
      work3,
      work4,
      work5,
    };
  },
};
</script>

<style scoped>

</style>

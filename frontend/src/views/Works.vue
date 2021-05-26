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
          <ul
            id="tp-grid" class="tp-grid"
          >
            <template
              v-for="category in categories"
                :key="category.id"
            >
              <li
                :data-pile="category.title"
              >
                <a :href="category.docs_link" target="_blank">
                  <img :src="url + category.img" :alt="category.title">
                </a>
              </li>
              <template
                v-if="category.works.length > 0"
              >
                <li
                  v-for="work in category.works"
                  :key="work.id"
                  :data-pile="category.title"
                >
                  <a :href="work.demo_link" target="_blank">
                    <div class="tp-info">
                      <div class="mb-4">
                        <p class="fw-bold">{{ work.title }}</p>
                        <p class="text-muted">{{ work.desc }}</p>
                      </div>
                      <div class="d-flex justify-content-around">
                        <a :href="work.github_link" target="_blank">
                          <i class="fa fa-github fs-3 text-black-50"></i>
                        </a>
                        <a :href="work.preview_link" target="_blank">
                          <i class="fa fa-video-camera text-info fs-3"></i>
                        </a>
                      </div>
                    </div>
                    <img :src="url + work.img" :alt="work.title">
                  </a>
                </li>
              </template>
            </template>
          </ul>
        </div>
      </div>
    </div>
    <div class="separated"></div>
  </div>
</template>

<script>
import axios from 'axios';
import work1 from '../assets/img/1.png';
import work2 from '../assets/img/2.png';
import work3 from '../assets/img/3.png';
import work4 from '../assets/img/4.png';
import work5 from '../assets/img/5.png';

export default {
  name: 'Works',
  data() {
    return {
      url: process.env.VUE_APP_API_URL,
      categories: [],
      work1,
      work2,
      work3,
      work4,
      work5,
    };
  },
  async created() {
    const res = await axios.get('http://localhost:8081/works');
    const { data } = res;
    this.categories = data;
  },
};
</script>

<style scoped>

</style>

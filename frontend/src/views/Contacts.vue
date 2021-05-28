<template>
  <section id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="contact-info">
            <h4>Contact Me</h4>
            <p class="text-white">Fill out the form to contact me.</p>
            <ul>
              <li class="media">
                <i class="fa fa-map"></i>
                <span class="media-body">Saratov</span>
              </li>
              <li class="media">
                <i class="fa fa-envelope"></i>
                <span class="media-body">belchenkov.leha@mail.ru</span>
              </li>
              <li class="media">
                <i class="fa fa-telegram"></i>
                <span class="media-body">BelchenkovAleksey</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="contact-form">
            <h4>Write to me</h4>
            <form id="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <input
                      id="name"
                      type="text"
                      name="Name"
                      placeholder="Name*"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group  mb-3">
                    <input
                      id="email"
                      type="email"
                      name="Email"
                      placeholder="Email*"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group mb-3">
                    <input
                      type="text"
                      id="subject"
                      name="Subject"
                      placeholder="Subject*"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-3">
                    <textarea
                      name="Message"
                      id="message"
                      placeholder="Your Message*"
                      class="form-control"
                    ></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="send">
                    <button class="btn btn-primary" type="button">
                      <i class="fa fa-send"></i> Send Message
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="separated container"></div>
</template>

<script>
export default {
  name: 'Contacts',
};
</script>

<style scoped>

</style>

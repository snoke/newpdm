<template>
    <div id="Kontakt" class="ContactForm" ref="contactForm">
      <h3 class="text-center w-100  text-secondary text-shadow-sm">Kontakt</h3>
<form class="pt-3"  v-on:submit="submit" id="contactForm">
  <div class="form-group">
    <input type="text" name="contact_phoneormail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email oder Telefonnr.">
  </div>  
  <div class="form-group">
    <textarea name="contact_message" class="form-control" id="exampleFormControlTextarea1" placeholder="Nachricht"></textarea>
  </div>
  <div class="text-center w-100">
  <button type="submit" class="btn btn-primary">Nachricht senden <i style=";" class="fas fa-envelope"></i></button>
  <div @click="click" :class="'link mt-3 '+this.style">{{this.message}}</div></div>
</form>

    </div>
</template>
<script>
export default {
  name: "ContactForm",
  components: {
  },
  data () { 
    return {
      result:null,
      message:null,
      style:null,
    }
  },
  created () {
  },
  methods: {
    click() {
      this.message=null
      this.style=null;
    },
    fetchData(response) {
      this.result = response.data.result
      if (this.result==true) {
        this.style="alert-success"
        this.message='Nachricht erfolgreich gesendet!'
      } else {
        this.style="alert-danger"
        this.message='Die Nachricht konnte nicht gesendet werden...'
      }
    },
    submit(e) {
      e.preventDefault();
      this.style=null
        this.message='sending mail....'
      var form = document.getElementById('contactForm');
      var data = new FormData(form);
      axios
      .post('/',data)
      .then(response => (this.fetchData(response)))
    }
  }
};
</script>
<template>
    <div id="Kontakt" class="ContactForm" ref="contactForm">
      <h3 class="text-center w-100  text-primary text-shadow-sm">Kontakt</h3>
<form class="pt-3">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email oder Telefonnr.">
  </div>  
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Nachricht"></textarea>
  </div>
  <div class="text-center w-100">
  <button type="submit" class="btn btn-primary">Nachricht senden <i style=";" class="fas fa-envelope"></i></button></div>
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
    }
  },
  created () {
  },
};
</script>
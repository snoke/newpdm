<template>
    <div id="contactForm" class="ContactForm">
      <h3 class="text-center w-100">Kontakt</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-1 w-75" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
<form class="pt-3">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ihre Email">
  </div>  
  <div class="form-group">
    <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Ihre Telefonnummer">
  </div>  
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ihre Nachricht"></textarea>
  </div>
  <div class="text-center w-100">
  <button type="submit" class="btn btn-primary">Submit</button></div>
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
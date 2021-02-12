<form 
  action="<?php the_permalink();?>" 
  method="post" class="js-form" 
  name="form-submit-lh" 
  novalidate="novalidate">
  <div class="inner-form">
    <div class="field name-field">
      <div class="control inner-control">
      <label for="first_name">First Name*</label>
        <input class="input is-info" type="text" name="first_name" id="first_name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
      </div>
      <div class="control inner-control">
      <label for="last_name">Last Name*</label>
        <input class="input is-info" type="text" name="last_name" id="last_name">
      </div>
    </div>
    <div class="field">
      <div class="control">
      <label for="email">Email*</label>
        <input class="input is-info" type="email" name="email" id="email">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <label for="message">Message</label>
        <textarea class="textarea is-info" name="message" id="message"></textarea>
      </div>
    </div>

    <div class="control">
      <button class="button is-primary submit-btn" type="submit" disabled=""> Submit</button>
    </div>
  </div>
  <div class="msg-area"></div>
</form>

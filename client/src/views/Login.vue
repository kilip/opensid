<template>
  <div id="login" class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol :md="8">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm @submit.prevent="doLogin(username, password)">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <CInputGroup class="mb-3">
                    <CInputGroupText>
                      <CIcon icon="cil-user" />
                    </CInputGroupText>
                    <CFormInput
                      placeholder="Username atau email anda"
                      autoComplete="username"
                      @input="username"
                      type="text"
                      class="form-control"
                    />
                  </CInputGroup>
                  <CInputGroup class="mb-4">
                    <CInputGroupText>
                      <CIcon icon="cil-lock-locked" />
                    </CInputGroupText>
                    <input
                      type="password"
                      placeholder="Password"
                      autoComplete="current-password"
                      v-model="password"
                      class="form-control"
                    />
                  </CInputGroup>
                  <CRow>
                    <CCol :xs="6">
                      <CButton color="primary" class="px-4">Login</CButton>
                    </CCol>
                    <!--
                    <CCol :xs="6" class="text-right">
                      <CButton color="link" class="px-0">
                        Forgot password?
                      </CButton>
                    </CCol>
                    -->
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard>
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>
<script>
import { mapActions } from 'vuex';
import {createApp, ref} from "vue";
import {
  CFormInput
} from '@coreui/vue';

export default {
  name: 'Login',
  el: 'login',
  components: {
    CFormInput
  },
  data(){
    return {
      username: null,
      password: null,
      foo: 'Bar'
    }
  },
  methods: {
    ...mapActions('auth',{
      login: 'login'
    }),
    doLogin(username, password){
      const payload = {
        username,
        password
      }
      let self = this;
      console.log(self.username);
      this.login(payload)
        .then(response => {
          console.log(response);
        });

    }
  }
}

</script>

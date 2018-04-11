<template>
      <b-nav-item-dropdown right no-caret>
        <template slot="button-content">
            {{user.name}}
        </template>
        <b-dropdown-item><i class="fa fa-shield"></i> Account</b-dropdown-item>
        <b-dropdown-item @click="logout"><i class="fa fa-lock"></i> Logout</b-dropdown-item>
      </b-nav-item-dropdown>
</template>
<script>
export default {
  name: 'header-dropdown',
  data: () => {
    return { 
      itemsCount: 42,
      user: {}
    }
  },
  computed: {
  },
  mounted () {
    this.user=JSON.parse(localStorage.getItem('user'))
  },
  methods: {
    logout (){
      localStorage.removeItem('token')
      this.$router.push('/login')
    }
  }
}
</script>

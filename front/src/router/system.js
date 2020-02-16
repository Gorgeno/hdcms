import Edit from '@/views/system/config/Edit'
import Admin from '@/views/Admin'
import Login from "@/views/admin/Login.vue";
import Index from '@/views/system/home/Index'
import store from "@/store";
import router from '@/router'
//系统配置
export default {
  path: '/system',
  component: Admin,
  async beforeEnter(to, from, next) {
    try {
      await store.dispatch('user/get');
      await store.dispatch('systemConfig/get')
      if (!store.state.user.is_super_admin) router.push('/admin');
    } catch (e) {
      store.dispatch('user/adminLogout');
    }
    next();
  },
  children: [
    {
      path: "/admin/login",
      component: Login
    },
    {
      path: "index",
      component: Index
    },
    {
      path: "config",
      component: Edit
    }
  ]
};
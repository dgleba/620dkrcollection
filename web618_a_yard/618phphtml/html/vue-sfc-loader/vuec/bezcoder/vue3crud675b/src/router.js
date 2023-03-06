import { createWebHistory, createRouter } from "vue-router";

const routes =  [
  {
    path: "/",
    name: "home",
    component: () => import("./components/HomeComponent")
  },  
  {
    path: "/posts",
    name: "posts",
    component: () => import("./components/IndexComponent")
  },
  {
    path: "/edit",
    name: "edit",
    component: () => import("./components/EditComponent")
  },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

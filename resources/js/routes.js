import Vue from "vue";

import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComponent from "./pages/HomeComponent"
import PostsComponent from "./pages/PostsComponent"
import DetailsPost from "./pages/DetailsPost"
import NotFound from "./pages/NotFound"

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeComponent
        },
        {
            path: "/posts",
            name: "posts",
            component: PostsComponent
        },
        {
            path: "/posts/:id",
            name: "details",
            component: DetailsPost
        },
        {
            path: "/*",
            name: "notFound",
            component: NotFound
        },
    ]
})

export default router;
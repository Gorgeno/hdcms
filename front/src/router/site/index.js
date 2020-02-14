import Main from "@/views/site/Main";
import manage from "./manage";
import config from "./config";

export default {
    path: "/site",
    name: "site",
    component: Main,
    children: [...manage, ...config]
};

export default [
  {
    name: "ArtikelList",
    path: "/artikel/",
    component: () =>
      import(/* webpackChunkName: "artikel" */ "../components/artikel/List"),
  },
  {
    name: "ArtikelCreate",
    path: "/artikel/create",
    component: () =>
      import(/* webpackChunkName: "artikel" */ "../components/artikel/Create"),
  },
  {
    name: "ArtikelUpdate",
    path: "/artikel/edit/:id",
    component: () =>
      import(/* webpackChunkName: "artikel" */ "../components/artikel/Update"),
  },
  {
    name: "ArtikelShow",
    path: "/artikel/show/:id",
    component: () =>
      import(/* webpackChunkName: "artikel" */ "../components/artikel/Show"),
  },
];

export default [
  {
    name: "KategoriList",
    path: "kategori/",
    component: () =>
      import(/* webpackChunkName: "kategori" */ "../components/kategori/List"),
  },
  {
    name: "KategoriCreate",
    path: "kategori/create",
    component: () =>
      import(
        /* webpackChunkName: "kategori" */ "../components/kategori/Create"
      ),
  },
  {
    name: "KategoriUpdate",
    path: "kategori/edit/:id",
    component: () =>
      import(
        /* webpackChunkName: "kategori" */ "../components/kategori/Update"
      ),
  },
  {
    name: "KategoriShow",
    path: "kategori/show/:id",
    component: () =>
      import(/* webpackChunkName: "kategori" */ "../components/kategori/Show"),
  },
];

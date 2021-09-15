import makeService from "../services/api";
import makeCrudModule from "./crud";

const kategoriService = makeService('/api/kategori');

export default makeCrudModule({
  service: kategoriService
});

import makeService from "../services/api";
import makeCrudModule from "./crud";

const artikelService = makeService('/api/artikel');

export default makeCrudModule({
  service: artikelService
});

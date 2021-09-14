import makeService from "../services/api";
import makeCrudModule from "./crud";

const configService = makeService('/api/config');

export default makeCrudModule({
  service: configService
});

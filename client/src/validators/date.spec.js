import { date } from './date';
import moment from "moment";

moment.suppressDeprecationWarnings = true;

describe('date', function () {
  it('should validate date value', () => {
    expect(date('foobar')).toBeFalsy();
  })
});

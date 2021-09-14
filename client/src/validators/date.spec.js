import { date } from './date';

describe('date', function () {
  it('should validate date value', () => {
    expect(date('foobar')).toBeFalsy();
  })
});

import { AbappPage } from './app.po';

describe('abapp App', () => {
  let page: AbappPage;

  beforeEach(() => {
    page = new AbappPage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!!');
  });
});

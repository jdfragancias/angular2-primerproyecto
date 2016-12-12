import { Angular2PrimerproyectoPage } from './app.po';

describe('angular2-primerproyecto App', function() {
  let page: Angular2PrimerproyectoPage;

  beforeEach(() => {
    page = new Angular2PrimerproyectoPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

describe('Update Profile Photo Failed', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get('.mt-3 > .btn').click();
    cy.get('#photo').selectFile('cypress/fixtures/pdf.pdf', { subjectType: 'input' });
    cy.get('#buttonPhoto > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Photo Success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get('.mt-3 > .btn').click();
    cy.get('#photo').selectFile('cypress/fixtures/face25.jpg', { subjectType: 'input' });
    cy.get('#buttonPhoto > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Name', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(2) > h3 > .tombol').click();
    cy.get('#name').clear();
    cy.get('#name').type("Irba Adika");
    cy.get('#buttonName > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Username', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(3) > h3 > .tombol').click();
    cy.get('#username').clear();
    cy.get('#username').type("irbaadika");
    cy.get('#buttonUsername > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Alamat Failed', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(5) > h3 > .tombol').click();
    cy.get('.modal-footer > [data-bs-toggle="modal"]').click();
    cy.get('#jalan').type("Ngidod", {force:true});
    cy.get('#kelurahan').type("Kedungkandang", {force:true});
    cy.get('#kecamatan').type("Bululawang", {force:true});
    cy.get('#kota').type("Malang", {force:true});
    cy.get('#provinsi').type("Jawa Timur", {force:true});
    cy.get('#kodePos').type("kode pos", {force:true});
    cy.get('#tambahAlamat > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Alamat Success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(5) > h3 > .tombol').click();
    cy.get('.modal-footer > [data-bs-toggle="modal"]').click();
    cy.get('#jalan').type("Ngidod", {force:true});
    cy.get('#kelurahan').type("Kedungkandang", {force:true});
    cy.get('#kecamatan').type("Bululawang", {force:true});
    cy.get('#kota').type("Malang", {force:true});
    cy.get('#provinsi').type("Jawa Timur", {force:true});
    cy.get('#kodePos').type("65555", {force:true});
    cy.get('#tambahAlamat > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Select Alamat', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(5) > h3 > .tombol').click();
    cy.get('.form-select').select(2);
    cy.get('#buttonAlamat > .modal-dialog > .modal-content > form > .modal-footer > [type="submit"]').click();
  })
})

describe('Update Profile Phone Failed', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(6) > h3 > .tombol').click();
    cy.get('#phone').clear({force:true});
    cy.get('#phone').type("phone", {force:true});
    cy.get('#buttonPhone > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

describe('Update Profile Phone Success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(4) > #navbarDropdown').click();
    cy.get(':nth-child(4) > .dropdown-menu > :nth-child(1) > .dropdown-item').click();
    cy.get(':nth-child(6) > h3 > .tombol').click();
    cy.get('#phone').clear({force:true});
    cy.get('#phone').type("0800000000000", {force:true});
    cy.get('#buttonPhone > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click();
  })
})

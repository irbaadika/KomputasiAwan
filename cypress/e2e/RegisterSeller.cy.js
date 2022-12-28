describe('0.1 Register Seller', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(3) > #navbarDropdown').click()
    cy.get(':nth-child(3) > .dropdown-menu > li > .dropdown-item').click()
    cy.get('#toko').type("Ndodik")
    cy.get('#npwp').type("2222222222222222")
    cy.get('#alamat').type("Arjowinangun")
    cy.get('#doc').selectFile('cypress/fixtures/integrity_pact.pdf', { subjectType: 'input' });
    cy.get('.large-btn').click()
  })
})

describe('0.2 Verifikasi Seller', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click()
    cy.get('#seller > .nav > .nav-item > .nav-link').click()
    cy.get(':nth-child(6) > .d-inline > .badge').click({force:true})
    cy.get('.img-xs').click()
    cy.get('.dropdown-item').click()
  })
})

describe('0.3 NPWP Salah', () => {
  it('Error', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(3) > #navbarDropdown').click()
    cy.get(':nth-child(3) > .dropdown-menu > li > .dropdown-item').click()
    cy.get('#toko').type("Ndodik")
    cy.get('#npwp').type("12345")
    cy.get('#alamat').type("Arjowinangun")
    cy.get('#doc').selectFile('cypress/fixtures/integrity_pact.pdf', { subjectType: 'input' });
    cy.get('.large-btn').click()
  })
})

describe('0.4 Tanpa Upload File', () => {
  it('Error', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(3) > #navbarDropdown').click()
    cy.get(':nth-child(3) > .dropdown-menu > li > .dropdown-item').click()
    cy.get('#toko').type("Ndodik")
    cy.get('#npwp').type("1111111111111111")
    cy.get('#alamat').type("Arjowinangun")
    cy.get('.large-btn').click()
  })
})

describe('0.5 Tanpa Melakukan Input', () => {
  it('Error', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(3) > #navbarDropdown').click()
    cy.get(':nth-child(3) > .dropdown-menu > li > .dropdown-item').click()
    cy.get('.large-btn').click()
  })
})


describe('0.1 Transaksi Buyer', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('pembeli@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.header-inner-one > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('.btn').click({force:true})
    cy.get('.product-add-cart > .bg-gray').type('1')
    cy.get('.product-btn').click()
    cy.get('.fs-100 > img').click()
    cy.get(':nth-child(7) > .btn').click()
    cy.get('#photo').selectFile('cypress/fixtures/bali.jpg', { subjectType: 'input' });
    cy.get('.btn-primary').click()
  })
})

describe('0.2 Verifikasi Pembayaran Oleh Seller', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(7) > [data-bs-toggle="collapse"]').click()
    cy.get('#trans > .nav > .nav-item > .nav-link').click()
    cy.get(':nth-child(1) > :nth-child(7) > .d-inline > .badge').click({force:true})
    cy.get('.img-xs').click()
    cy.get('form > .dropdown-item').click()
  })
})

describe('0.3 Cek Data Transaksi Oleh Admin', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(11) > [data-bs-toggle="collapse"]').click()
    cy.get('#trans > .nav > .nav-item > .nav-link').click()
    cy.get('.img-xs').click()
    cy.get('.dropdown-item').click()
  })
})
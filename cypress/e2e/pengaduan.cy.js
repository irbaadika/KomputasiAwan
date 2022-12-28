describe('report empty subject', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get('.header-inner-one > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('.shop-product > :nth-child(1) > :nth-child(2) > .fs-montserrat').click();
    cy.get('a > .fs-montserrat').click();
    
    cy.get('.border-start > div > .btn-danger').click();
    cy.get('#content').type("Saya sudah beli namun barang tidak datang");
    cy.get('#photo').selectFile('cypress/fixtures/1.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('report empty content', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get('.header-inner-one > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('.shop-product > :nth-child(1) > :nth-child(2) > .fs-montserrat').click();
    cy.get('a > .fs-montserrat').click();
    
    cy.get('.border-start > div > .btn-danger').click();
    cy.get('#subject').type("Penipuan");
    cy.get('#photo').selectFile('cypress/fixtures/1.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('report empty photo', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get('.header-inner-one > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('.shop-product > :nth-child(1) > :nth-child(2) > .fs-montserrat').click();
    cy.get('a > .fs-montserrat').click();
    
    cy.get('.border-start > div > .btn-danger').click();
    cy.get('#subject').type("Penipuan");
    cy.get('#content').type("Saya sudah beli namun barang tidak datang");
    cy.get('.large-btn').click();
  })
})

describe('report success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("irba@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get('.header-inner-one > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('.shop-product > :nth-child(1) > :nth-child(2) > .fs-montserrat').click();
    cy.get('a > .fs-montserrat').click();
    
    cy.get('.border-start > div > .btn-danger').click();
    cy.get('#subject').type("Penipuan");
    cy.get('#content').type("Saya sudah beli namun barang tidak datang");
    cy.get('#photo').selectFile('cypress/fixtures/1.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})
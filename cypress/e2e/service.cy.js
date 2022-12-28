describe('service empty type', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#merk').type("Asus");
    cy.get('#phone').type("088888888888");
    
    cy.get('#keterangan').type("Blue Screen");
    cy.get('#photo').selectFile('cypress/fixtures/2.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('service empty merk', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#type').type("ROG");
    cy.get('#phone').type("088888888888");
    
    cy.get('#keterangan').type("Blue Screen");
    cy.get('#photo').selectFile('cypress/fixtures/2.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('service empty phone', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#type').type("ROG");
    cy.get('#merk').type("Asus");
    
    cy.get('#keterangan').type("Blue Screen");
    cy.get('#photo').selectFile('cypress/fixtures/2.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('service empty keterangan', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#type').type("ROG");
    cy.get('#merk').type("Asus");
    cy.get('#phone').type("088888888888");
    
    cy.get('#photo').selectFile('cypress/fixtures/2.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})

describe('service empty photo', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#type').type("ROG");
    cy.get('#merk').type("Asus");
    cy.get('#phone').type("088888888888");
    
    cy.get('#keterangan').type("Blue Screen");
    cy.get('.large-btn').click();
  })
})

describe('service success', () => {
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
    
    cy.get('.btn-secondary').click();
    cy.get('#type').type("ROG");
    cy.get('#merk').type("Asus");
    cy.get('#phone').type("088888888888");
    
    cy.get('#keterangan').type("Blue Screen");
    cy.get('#photo').selectFile('cypress/fixtures/2.png', { subjectType: 'input' });
    cy.get('.large-btn').click();
  })
})
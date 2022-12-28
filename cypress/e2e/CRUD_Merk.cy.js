describe('Create Merk same name', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("admin@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(8) > .nav-link > .menu-title').click();
    cy.get('.btn').click({force:true});
    cy.get('#name').type("Asus", {force:true});
    cy.get('.btn').click({force:true});
  })
})

describe('Create Merk', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("admin@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(8) > .nav-link > .menu-title').click();
    cy.get('.btn').click({force:true});
    cy.get('#name').type("Hp", {force:true});
    cy.get('.btn').click({force:true});
  })
})

describe('Edit Merk', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("admin@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(8) > .nav-link > .menu-title').click();
    cy.get(':nth-child(5) > :nth-child(3) > .bg-warning > .menu-icon').click();
    cy.get('#name').clear({force:true});
    cy.get('#name').type("Alienware", {force:true});
    cy.get('.btn').click();
  })
})

describe('Delete Merk', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click();
    cy.get('#email').type("admin@gmail.com");
    cy.get('#password').type("password");
    cy.get('.btn').click();
    cy.get(':nth-child(8) > .nav-link > .menu-title').click();
    cy.get(':nth-child(5) > :nth-child(3) > .d-inline > .badge > .menu-icon').click();
  })
})
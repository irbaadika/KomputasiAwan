describe('tambah kategory', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(7) > .nav-link').click()
    cy.get('.btn').click({force:true})
    cy.get('#name').type('Headset', {force:true})
    cy.get('.btn').click({force:true})
  })
})

describe('tambah kategory sama', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(7) > .nav-link').click()
    cy.get('.btn').click({force:true})
    cy.get('#name').type('Laptop', {force:true})
    cy.get('.btn').click({force:true})
  })
})

describe('update kategory', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(7) > .nav-link').click()
    cy.get(':nth-child(6) > :nth-child(3) > .bg-warning').click()
    cy.get('#name').clear({force:true})
    cy.get('#name').type('Earphone', {force:true})
    cy.get('.btn').click({force:true})
  })
})

describe('delete kategory', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(7) > .nav-link').click()
    cy.get(':nth-child(6) > :nth-child(3) > .d-inline > .badge').click()

  })
})
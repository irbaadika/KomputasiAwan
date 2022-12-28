describe('0.1 CRUD Buyer (Read)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(4) > [data-bs-toggle="collapse"]').click({force:true})
    cy.get('#buyer > .nav > .nav-item > .nav-link').click({force:true})
    cy.get('.bg-info > .menu-icon').click({force:true})
    cy.get('.btn').click()
  })
})

describe('0.2 CRUD Buyer (Delete)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(4) > [data-bs-toggle="collapse"]').click({force:true})
    cy.get('#buyer > .nav > .nav-item > .nav-link').click({force:true})
    cy.get(':nth-child(6) > .d-inline > .badge').click({force:true})
    cy.get('.img-xs').click()
    cy.get('.dropdown-item').click()
  })
})

describe('0.3 CRUD Seller (Read)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click({force:true})
    cy.get('#seller > .nav > .nav-item > .nav-link').click({force:true})
    cy.get('.bg-info > .menu-icon').click({force:true})
    cy.get('.btn').click()
  })
})

describe('0.4 CRUD Seller (Delete)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click({force:true})
    cy.get('#seller > .nav > .nav-item > .nav-link').click({force:true})
    cy.get(':nth-child(7) > .d-inline > .badge').click({force:true})
    cy.get('.img-xs').click()
    cy.get('.dropdown-item').click()
  })
})
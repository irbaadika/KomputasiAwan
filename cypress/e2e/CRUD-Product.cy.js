describe('0.1 CRUD Product (Create)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click()
    cy.get(':nth-child(3) > .nav > .nav-item > .nav-link').click()
    cy.get(':nth-child(2) > .form-select').select(2, {force:true})
    cy.get('#type').type('Laptop', {force:true})
    cy.get('#deskripsi').type('Keren')
    cy.get(':nth-child(5) > .form-select').select(1, {force:true})
    cy.get('#stok').type('2')
    cy.get('#harga').type('5000000')
    cy.get('#photo').selectFile('cypress/fixtures/HasilTugas.jpeg', { subjectType: 'input' });
    cy.get('.btn').click()
  })
})

describe('0.2 CRUD Product (Read)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click()
    cy.get(':nth-child(5) > :nth-child(2) > .nav > .nav-item > .nav-link').click()
    cy.get('.bg-info > .menu-icon').click()
    cy.get('.btn').click()
  })
})

describe('0.3 CRUD Product (Update)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click()
    cy.get(':nth-child(5) > :nth-child(2) > .nav > .nav-item > .nav-link').click()
    cy.get('.bg-warning > .menu-icon').click()
    cy.get(':nth-child(3) > .form-select').select(1, {force:true})
    cy.get('#type').type('Laptop Mahal', {force:true})
    cy.get('#deskripsi').clear()
    cy.get('#deskripsi').type('Laptop Gaming')
    cy.get('#stok').clear()
    cy.get('#stok').type('5')
    cy.get('.btn').click()
  })
})

describe('0.4 CRUD Product (Delete)', () => {
  it('Passes', () => {
    cy.visit('http://127.0.0.1:8000')
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    });
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    cy.get('#email').type('user@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(5) > [data-bs-toggle="collapse"]').click()
    cy.get(':nth-child(5) > :nth-child(2) > .nav > .nav-item > .nav-link').click()
    cy.get('.d-inline > .badge > .menu-icon').click()
  })
})
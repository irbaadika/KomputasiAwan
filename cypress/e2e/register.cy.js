describe('success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('#name').type('Irba Adika')
    cy.get('#username').type('irba')
    cy.get('#phone').type('082234567234')
    cy.get('#email').type('irba@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
  })
})

describe('username telah tersedia', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('#name').type('Auryno Nagata')
    cy.get('#username').type('auryno19')
    cy.get('#phone').type('082234567234')
    cy.get('#email').type('auryno19@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
  })
})

describe('phone salah', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('#name').type('Auryno Nagata')
    cy.get('#username').type('auryno')
    cy.get('#phone').type('nohp')
    cy.get('#email').type('auryno19@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
  })
})

describe('password salah', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('#name').type('Auryno Nagata')
    cy.get('#username').type('auryno')
    cy.get('#phone').type('082232323232')
    cy.get('#email').type('auryno19@gmail.com')
    cy.get('#password').type('12345')
    cy.get('.btn').click()
  })
})

describe('email telah tersedia', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('#name').type('Auryno Nagata')
    cy.get('#username').type('auryno')
    cy.get('#phone').type('082234567234')
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
  })
})

describe('form tidak diisi', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('.forgot').click()
    cy.get('.btn').click()
  })
})

describe('verifikasi akun', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('admin@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get(':nth-child(4) > [data-bs-toggle="collapse"]').click({force:true})
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#buyer > .nav > .nav-item > .nav-link').click({force:true})
    cy.get(':nth-child(3) > :nth-child(5) > .d-inline > .badge').click({force:true})
  })
})
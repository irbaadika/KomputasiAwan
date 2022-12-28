// describe('password salah', () => {
//   it('passes', () => {
//     cy.visit('http://127.0.0.1:8000')
//     cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
//     Cypress.on('uncaught:exception', (err, runnable) => {
//       return false
//     })
//     cy.get('#email').type('irba@gmail.com')
//     cy.get('#password').type('password123')
//     cy.get('.btn').click()
//   })
// })

// describe('email salah', () => {
//   it('passes', () => {
//     cy.visit('http://127.0.0.1:8000')
//     cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
//     Cypress.on('uncaught:exception', (err, runnable) => {
//       return false
//     })
//     cy.get('#email').type('irba2@gmail.com')
//     cy.get('#password').type('password')
//     cy.get('.btn').click()
//   })
// })

// describe('email dan password salah', () => {
//   it('passes', () => {
//     cy.visit('http://127.0.0.1:8000')
//     cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
//     Cypress.on('uncaught:exception', (err, runnable) => {
//       return false
//     })
//     cy.get('#email').type('irba2@gmail.com')
//     cy.get('#password').type('password123')
//     cy.get('.btn').click()
//   })
// })

// describe('form kosong', () => {
//   it('passes', () => {
//     cy.visit('http://127.0.0.1:8000')
//     cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
//     Cypress.on('uncaught:exception', (err, runnable) => {
//       return false
//     })
//     cy.get('.btn').click()
//   })
// })

// describe('akun belum terverifikasi', () => {
//   it('passes', () => {
//     cy.visit('http://127.0.0.1:8000')
//     cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
//     Cypress.on('uncaught:exception', (err, runnable) => {
//       return false
//     })
//     cy.get('#email').type('nicola@gmail.com')
//     cy.get('#password').type('password')
//     cy.get('.btn').click()
//   })
// })

describe('success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('irba@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
  })
})
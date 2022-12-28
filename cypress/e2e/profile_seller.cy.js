describe('update photo salah', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get('.mt-3 > .btn').click()
    cy.get('#photo').selectFile('cypress/fixtures/doc.pdf', { subjectType: 'input' });
    cy.get('#buttonPhoto > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
    cy.get('.mt-3 > .btn').click()
  })
})

describe('update photo success', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get('.mt-3 > .btn').click()
    cy.get('#photo').selectFile('cypress/fixtures/face15.jpg', { subjectType: 'input' });
    cy.get('#buttonPhoto > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
  })
})

describe('update nama', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get(':nth-child(2) > h3 > .tombol').click()
    cy.get('#name').clear({force:true})
    cy.get('#name').type('Auryno Nagata Adyatma')
    cy.get('#buttonName > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
  })
})

describe('update toko', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get(':nth-child(3) > h3 > .tombol').click()
    cy.get('#toko').clear({force:true})
    cy.get('#toko').type('Toko keren').click()
    cy.get('#buttonToko > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
  })
})

describe('update alamat', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get(':nth-child(5) > h3 > .tombol').click()
    cy.get('#alamat').clear({force:true})
    cy.get('#alamat').type('Surabaya').click()
    cy.get('#buttonAlamat > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
  })
})

describe('update phone salah', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get(':nth-child(6) > h3 > .tombol').click()
    cy.get('#phone').clear({force:true})
    cy.get('#phone').type('nohape').click()
    cy.get('#buttonPhone > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
    cy.get(':nth-child(6) > h3 > .tombol').click()
  })
})

describe('update phone', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.get('.header-login > nav > #primary-navigation > :nth-child(2) > .fs-100').click()
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false
    })
    cy.get('#email').type('auryno@gmail.com')
    cy.get('#password').type('password')
    cy.get('.btn').click()
    cy.get('.img-xs').click()
    cy.get('a.dropdown-item').click()
    cy.get(':nth-child(6) > h3 > .tombol').click()
    cy.get('#phone').clear({force:true})
    cy.get('#phone').type('082233445566').click()
    cy.get('#buttonPhone > .modal-dialog > .modal-content > form > .modal-footer > .btn-primary').click()
  })
})
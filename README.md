## About Task

This is a github repository for a partial ticketing system. We have very simple views for a ticket index, view, and create form. You’re tasked with a few feature requests, bug fixes, a request for feedback, and to scope out a larger feature.

**Feature Requests:**
- Create a reusable utility class to format dates in Vue, implement this in the tickets index.
- Add breadcrumbs
- Pagination Improvements
  - Currently, the tickets view loads all tickets and does pagination on the client side. Let’s improve performance by implementing server-side pagination
- Advanced Search 
  - Please create a filtering system that allows us to search or filter tickets by the following fields: 
    - Title
    - Content
    - User name
    - User email
    - Date Range
    - Priority
    - Status

**Bugs:**
- [Front End] The ticket pagination isn’t working! Clicking on a page number will move me to a page, and the Prev button works, but the next button is broken.
- Ticket Submission issues 
  - Cannot create a ticket with Low or High priorities
  - Cannot create a ticket with a status of In Progress

**General:**
- If a junior developer submitted this code to you, what would your suggestions be for improvement?
- This web application needs to support a mobile app via an API. Please write a short scope of what would be needed and an overview of how you would add this feature.  Provide some suggestions and options as you would if responding to this request from the project owner. The API needs to support username/password auth via a JSON api, and needs to provide CRUD for tickets.

Please fork this repository and commit changes following the appropriate standards. Ensure that your modifications adhere to a scalable architecture and principles to accommodate future enhancements and extensions.

Feel free to ask any questions, and to submit, please respond with a link to a git repository and any comments you may have!
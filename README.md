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


**Answers**

- If a junior developer submitted this code to you, what would your suggestions be for improvement?

**Answer:**

- Try to use the built-in functionality of Laravel as much as possible. For example, the pagination issue could be resolved by using Laravel's built-in pagination functionality in the controller. This would improve performance and reduce the complexity of the front-end code.
And make sure to test the functionality before pushing it.
- This web application needs to support a mobile app via an API. Please write a short scope of what would be needed and an overview of how you would add this feature.  Provide some suggestions and options as you would if responding to this request from the project owner. The API needs to support username/password auth via a JSON api, and needs to provide CRUD for tickets.


**Answer:**

To support a mobile app via an API, we would need to create a RESTful API that exposes the necessary endpoints for the mobile app to interact with. Here's a brief scope and overview of what would be needed:

1. **Authentication**: We would need to implement an authentication system that supports username/password auth via a JSON API. Laravel's built-in Passport or Sanctum packages can be used for this purpose. They provide a full OAuth2 server implementation for your Laravel application.

2. **API Endpoints**: We would need to create API endpoints for CRUD (Create, Read, Update, Delete) operations on tickets. This would involve creating routes and controllers for handling these operations.

3. **Data Validation**: We would need to validate the data coming from the mobile app to ensure it's in the correct format before performing operations on the database.

4. **Error Handling**: We would need to implement error handling to return appropriate error messages and status codes to the mobile app.

5. **API Documentation**: We would need to document the API endpoints, request/response formats, and any error messages for the mobile app developers.

Here's a rough overview of how the API endpoints for tickets might look:

- `POST /api/tickets`: Create a new ticket.
- `GET /api/tickets`: Get a list of all tickets.
- `GET /api/tickets/{id}`: Get the details of a specific ticket.
- `PUT /api/tickets/{id}`: Update a specific ticket.
- `DELETE /api/tickets/{id}`: Delete a specific ticket.

Each of these endpoints would interact with the `Ticket` model and use the Eloquent ORM for database operations. The controllers would handle the incoming requests, validate the data, and return appropriate responses.

For authentication, we could use a route middleware to protect these endpoints and ensure only authenticated users can access them. Laravel Passport provides a simple way to do this with its `auth:api` middleware.

This is a high-level overview and the actual implementation may vary based on the specific requirements of the mobile app.

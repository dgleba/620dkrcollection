class Post < ApplicationRecord

    after_create_commit -> { broadcast_prepend_to "posts", partial: "posts/post", locals: { post: self }, target: "posts" }

end

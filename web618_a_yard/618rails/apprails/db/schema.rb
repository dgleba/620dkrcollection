# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 50161230223315) do

  create_table "copy_projects", id: false, force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer  "id",                                null: false
    t.string   "number",              limit: 117
    t.string   "name",                limit: 1102
    t.string   "tech_radar_num",      limit: 13
    t.string   "active",              limit: 38
    t.string   "priority",            limit: 36
    t.string   "ae_lead",             limit: 216
    t.string   "bd_lead_si_customer", limit: 225
    t.text     "ae_objective",        limit: 65535
    t.integer  "fave_num"
    t.integer  "sort_order"
    t.integer  "active_status"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "copy_time_logs", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.integer  "project_id"
    t.date     "LogDate"
    t.float    "LogHours",   limit: 24
    t.text     "detail",     limit: 65535
    t.integer  "user_id"
    t.datetime "created_at",               null: false
    t.datetime "updated_at",               null: false
    t.index ["project_id"], name: "index_time_logs_on_project_id", using: :btree
    t.index ["user_id"], name: "index_time_logs_on_user_id", using: :btree
  end

  create_table "favorite_projects", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.integer  "project_id"
    t.integer  "user_id"
    t.integer  "fave_num"
    t.integer  "sort_order"
    t.integer  "active_status"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
    t.index ["project_id"], name: "index_favorite_projects_on_project_id", using: :btree
    t.index ["user_id"], name: "index_favorite_projects_on_user_id", using: :btree
  end

  create_table "projects", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string   "name"
    t.string   "number"
    t.string   "tech_radar_num"
    t.string   "active"
    t.string   "priority"
    t.string   "ae_lead"
    t.string   "bd_lead_si_customer"
    t.text     "ae_objective",        limit: 65535
    t.integer  "sort_order"
    t.integer  "active_status"
    t.datetime "created_at",                        null: false
    t.datetime "updated_at",                        null: false
  end

  create_table "roles", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string   "name"
    t.string   "description"
    t.integer  "active_status"
    t.integer  "sort"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
  end

  create_table "time_logs", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.integer  "project_id"
    t.date     "log_date"
    t.float    "log_hours",  limit: 24
    t.text     "detail",     limit: 65535
    t.integer  "user_id"
    t.datetime "created_at",               null: false
    t.datetime "updated_at",               null: false
    t.index ["project_id"], name: "index_time_logs_on_project_id", using: :btree
    t.index ["user_id"], name: "index_time_logs_on_user_id", using: :btree
  end

  create_table "user_projects", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.integer  "project_id"
    t.integer  "user_id"
    t.integer  "fave_num"
    t.integer  "sort_order"
    t.integer  "active_status"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
    t.index ["project_id"], name: "index_user_projects_on_project_id", using: :btree
    t.index ["user_id"], name: "index_user_projects_on_user_id", using: :btree
  end

  create_table "users", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string   "email",                       default: "", null: false
    t.string   "encrypted_password",          default: "", null: false
    t.string   "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.integer  "sign_in_count",               default: 0,  null: false
    t.datetime "current_sign_in_at"
    t.datetime "last_sign_in_at"
    t.string   "current_sign_in_ip"
    t.string   "last_sign_in_ip"
    t.datetime "created_at",                               null: false
    t.datetime "updated_at",                               null: false
    t.string   "name"
    t.integer  "role_id",                     default: 1
    t.integer  "auditor_inMSaccess_reporter"
    t.index ["auditor_inMSaccess_reporter"], name: "index_users_on_auditor_inMSaccess_reporter", unique: true, using: :btree
    t.index ["email"], name: "index_users_on_email", unique: true, using: :btree
    t.index ["reset_password_token"], name: "index_users_on_reset_password_token", unique: true, using: :btree
    t.index ["role_id"], name: "index_users_on_role_id", using: :btree
  end

  create_table "version_associations", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.integer "version_id"
    t.string  "foreign_key_name", null: false
    t.integer "foreign_key_id"
    t.index ["foreign_key_name", "foreign_key_id"], name: "index_version_associations_on_foreign_key", using: :btree
    t.index ["version_id"], name: "index_version_associations_on_version_id", using: :btree
  end

  create_table "versions", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string   "item_type",                         null: false
    t.integer  "item_id",                           null: false
    t.string   "event",                             null: false
    t.string   "whodunnit"
    t.text     "object",         limit: 4294967295
    t.datetime "created_at"
    t.text     "object_changes", limit: 4294967295
    t.integer  "transaction_id"
    t.index ["item_type", "item_id"], name: "index_versions_on_item_type_and_item_id", using: :btree
    t.index ["transaction_id"], name: "index_versions_on_transaction_id", using: :btree
  end

  create_table "x-projects", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string   "name"
    t.integer  "fave_num"
    t.integer  "sort_order"
    t.integer  "active_status"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
  end

  create_table "x2-projects", id: false, force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string "number",              limit: 217
    t.string "tech_radar_num",      limit: 23
    t.string "folder",              limit: 1102
    t.string "active_status",       limit: 48
    t.string "priority",            limit: 46
    t.string "ae_lead",             limit: 116
    t.string "bd_lead_si_customer", limit: 125
    t.text   "ae_objective",        limit: 65535
  end

  add_foreign_key "favorite_projects", "projects"
  add_foreign_key "favorite_projects", "users"
  add_foreign_key "time_logs", "projects"
  add_foreign_key "time_logs", "users"
  add_foreign_key "user_projects", "projects"
  add_foreign_key "user_projects", "users"
  add_foreign_key "users", "roles"
end
